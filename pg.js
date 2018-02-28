//updated super simple single request
pool.query('INSERT INTO "people" ("first_name") VALUES ($1) RETURNING "id";', [contact.first_name], (err,res) =>{
    if (err){
        throw err;
    }
    console.log('success');
})

//Async simple example
app.post('/contact', (req, res)=> {
    const contact = req.body;
(async () => {
    let queryText = 'INSERT INTO "people" ("first_name") VALUES ($1) RETURNING "id";'
    //await say stop where you are and wait until the query runs
    //returns the results
    const result = await pool.query(queryText, [contact.first_name]);
    res.sendStatus(201);
})().catch((error))
});

//Async big example
app.post('/contact', (req,res) => {
    (async () => {
        const client = await pool.connect();
        try{
            await client.query('BEGIN');
            let queryText = 'INSERT INTO "addresses" ("city", "state", "zip", "street") VALUES ($1, $2, $3, $4) RETURNING "id";';
            const values = [contact.city, contact.state, contact.zip, contact.street];
            const addressResult = await client.query(queryText, values); 
            const addressId = addressResult.rows[0].id;
            queryText = 'INSERT INTO "people" ("first_name", "address_id") VALUES ($1, $2);';
            const result = await client.query(queryText, [contact.first_name, addressId]);
            await client.query('COMMIT');
            res.sendStatus(201);
        } catch(e){
            console.log('ROLLBACK', e);
            await client.query('ROLLBACK');
            //allows us to catch it up one level
            //.catch error is the same error as in line 45
            throw e;
        } finally {
            client.release();
        }
    })().catch((error)=> {
        console.log(error);
        res.sendStatus(500);
    })
})

//short cut
const { Pool } = require('pg')

