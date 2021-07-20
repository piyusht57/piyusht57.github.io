const mongoose = require("mongoose");
const validator = require("validator");

const studentSchema = new mongoose.Schema({
    name:{
        type:String,
        required:true,
        minlength:3
    },
    email:{
        type:String,
        required:true,
        unique:[true,"email he pehle se"],
        validate(value){
                if(!validator.isEmail(value)){
                    throw new Error("Invalid Email")
                }
        }
    },
    phone:{
        type:Number,
        minlength:10,
        maxlength:10,
    },
    address:{
        type:String,
        required:true,
    }
})

// yaha se naya coolection
const Student = new mongoose.model('Student',studentSchema);
module.exports =Student;