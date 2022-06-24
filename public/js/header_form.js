//////////////////////////////SIMPLE TEXT///////////////////////////
var Name=document.getElementById("name");
var job=document.getElementById("job");
var profile_input=document.getElementById("file");

/////////////////////////INPUTS//////////////////////////////////
var name_input=document.getElementById("name_input");
var job_input=document.getElementById('job_input');
var image_text=document.getElementById("image_text");
var image_input=document.getElementById("image_input");


///////////////////////////Making inputs equal to previous text///////////////
name_input.value=Name.innerHTML;
job_input.value=job.innerHTML;
image_text.value=image_input.value;
image_input=profile_input;
    
///////////////////////APPLYING ONCHANGE ON INPUTS/////////////////
name_input.onchange=()=>{
    Name.innerHTML = name_input.value
console.log(name_input.value)
}
job_input.onchange=()=>{
    job.innerHTML = job_input.value
}
profile_input.onchange=()=>{
    image_input=profile_input;
    image_text.value=profile_input.value
}