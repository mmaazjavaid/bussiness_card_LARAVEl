//////////////////////////////SIMPLE TEXT///////////////////////////
var Name=document.getElementById("name");
var job=document.getElementById("job");
var profile_input=document.getElementById("file");

/////////////////////////INPUTS//////////////////////////////////
var name_input=document.getElementById("name_input");
var job_input=document.getElementById('job_input');
//var image_text=document.getElementById("image_text");


///////////////////////////Making inputs equal to previous text///////////////
name_input.value=Name.innerHTML;
job_input.value=job.innerHTML;
    
///////////////////////APPLYING ONCHANGE ON INPUTS/////////////////
name_input.onchange=()=>{
    Name.innerHTML = name_input.value
console.log(name_input.value)
}
job_input.onchange=()=>{
    job.innerHTML = job_input.value
}
// profile_input.onchange=()=>{
//     image_text.value=profile_input.value
// }