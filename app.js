const app = require ("express")();
const port = process.env.port || 3000;

app.get("",(req, res)=> {
    res.send("Hello world, Heroku");
})

app.get("/api/user", (req, res) => {
    ""
})

app.listen(port,() => {
    console.log('App is running!');
})