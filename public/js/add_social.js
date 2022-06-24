
function addNew() {
    const div_1 = document.createElement("div");
    div_1.setAttribute("class", "social_link_select_area");

    const div_2 = document.createElement("div");
    div_2.setAttribute("class", "social_link_select_area_heading");

    const para = document.createElement("p");
    const text = document.createTextNode("Social network");



    const div_3 = document.createElement("div");
    div_3.setAttribute("class", "social_link_input_area");

    const select = document.createElement("select");
    select.setAttribute("class", "social_link_input_area");

    const input = document.createElement("input");
    input.setAttribute("type", "text");
    input.setAttribute("name", "link_url");
    input.setAttribute("placeholder", "link url")


    var option = document.createElement("option");
    option.value = "hand";
    option.text = "Hand";
    select.add(option);
    
    div_3.appendChild(select)
    div_3.appendChild(input)
    para.appendChild(text)
    div_2.appendChild(para)
    div_1.appendChild(div_2)
    div_1.appendChild(div_3)



    const button=document.getElementById('add_new_button');

    document.getElementById('social_link_form_container').insertBefore(div_1,button);
}
