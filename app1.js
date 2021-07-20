const e = require("express");
const express = require("express");
require("./db/conn");
const Student = require("./models/student");
const app = express();
const port = process.env.PORT || 8080;
app.use(express.json());


app.post("/students", async (req, res) => {
    try {
        const user = new Student(req.body);
        const createUser = await user.save();
        res.status(201).send(createUser);

    } catch (e) {
        res.status(400).send(e);
    }

})

app.get("/students", async (req, res) => {
    try {
        const studentsData = await Student.find();
        res.send(studentsData);
    }
    catch (e) {
        res.send(e);
    }

})

app.patch("/students/:id",async(req,res)=>{
    try{
        const _id = req.params.id;
        const updateStudents = await Student.findByIdAndUpdate(_id,req.body,{
            new:true
        });
        res.send(updateStudents);

    }catch(e){
        res.status(400).send(e);
    }
})




app.delete("/students/:id", async (req, res) => {
    try {
        const deleteStudent = await Student.findByIdAndDelete();
        if(!req.params.id){
            return res.status(400).send()
        }
        res.send(studentsData);
    }
    catch (e) {
        res.status(500).send(e);
    }

})







app.listen(port, () => {
    console.log(`connection succesfully started at port ${port}`);
})