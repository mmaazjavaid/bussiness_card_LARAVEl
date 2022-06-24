const arr=[

    {
        id:1,
        name:"linkedin"
    },
    {
        id:2,
        name:"line"
    },
    {
        id:3,
        name:"khamsat"
    },
    {
        id:4,
        name:"linktree"
    },
    {
        id:5,
        name:"menu"
    },
    {
        id:6,
        name:"phone"
    },
    {
        id:7,
        name:"paypal"
    },
    {
        id:8,
        name:"paylah"
    },
    {
        id:9,
        name:"pinterest"
    },

]

function addNew() {
    const form = document.createElement("form");
    form.setAttribute("class", "social_link_select_area");
    form.setAttribute("action", "{{route('submit_about')}}");
    form.setAttribute("method", "POST");
    const div_1 = document.createElement("div");
    div_1.setAttribute("class", "social_link_select_area");

    const div_2 = document.createElement("div");
    div_2.setAttribute("class", "social_link_select_area_heading");

    const para = document.createElement("p");
    const text = document.createTextNode("Social network");

    const text_save = document.createTextNode("save");
    const save_button = document.createElement("button");
    save_button.setAttribute("class", "save_button");
    save_button.appendChild(text_save)


    const div_3 = document.createElement("div");
    div_3.setAttribute("class", "social_link_input_area");

    const select = document.createElement("select");
    select.setAttribute("class", "social_link_input_area");

    const input = document.createElement("input");
    input.setAttribute("type", "text");
    input.setAttribute("name", "link_url");
    input.setAttribute("placeholder", "link url")

    arr.map((element)=>{
        var option = document.createElement("option");
        option.value = element.id;
        option.text = element.name;
        select.add(option);
    })

    
    div_3.appendChild(select)
    div_3.appendChild(input)
    para.appendChild(text)
    div_2.appendChild(para)
    div_2.appendChild(save_button)
    div_1.appendChild(div_2)
    div_1.appendChild(div_3)


     form.appendChild(div_1);
    const button=document.getElementById('add_new_button');

    document.getElementById('social_link_form_container').insertBefore(form,button);
}
