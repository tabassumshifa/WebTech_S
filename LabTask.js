
// PROJECT DATA
const projectData=[
{
 title:"Hospital Management System",
 desc:"A C# .NET hospital management software.",
 link:"#"
},
{
 title:"Disaster Management Platform",
 desc:"CrisisConnect real time disaster help platform.",
 link:"#"
},
{
 title:"Student Manager",
 desc:"JavaScript student list manager with DOM.",
 link:"#"
}
]

// DYNAMIC PROJECT CARDS
const projectContainer=document.getElementById("projects")

projectData.forEach(p=>{
 const card=document.createElement("div")
 card.className="card"

 card.innerHTML=`
 <h3>${p.title}</h3>
 <p>${p.desc}</p>
 <a href="${p.link}">View Project</a>
 `

 projectContainer.appendChild(card)
})


// FORM VALIDATION
const form=document.getElementById("contactForm")

form.addEventListener("submit",function(e){
 e.preventDefault()

 let valid=true

 const name=document.getElementById("name").value
 const email=document.getElementById("email").value
 const subject=document.getElementById("subject").value
 const message=document.getElementById("message").value

 if(name===""){
 document.getElementById("nameError").innerText="Enter your name"
 valid=false
 }else{document.getElementById("nameError").innerText=""}

 if(!email.includes("@")){
 document.getElementById("emailError").innerText="Enter valid email"
 valid=false
 }else{document.getElementById("emailError").innerText=""}

 if(subject===""){
 document.getElementById("subjectError").innerText="Enter subject"
 valid=false
 }else{document.getElementById("subjectError").innerText=""}

 if(message===""){
 document.getElementById("messageError").innerText="Enter message"
 valid=false
 }else{document.getElementById("messageError").innerText=""}

 if(valid){
 alert("Form submitted successfully!")
 form.reset()
 }

})


// DARK MODE
const btn=document.getElementById("modeBtn")

if(localStorage.getItem("theme")==="dark"){
 document.body.classList.add("dark")
}

btn.onclick=function(){
 document.body.classList.toggle("dark")

 if(document.body.classList.contains("dark")){
 localStorage.setItem("theme","dark")
 }else{
 localStorage.setItem("theme","light")
 }
}


// SCROLL TO TOP FEATURE
const topBtn=document.getElementById("topBtn")

window.onscroll=function(){
 if(document.documentElement.scrollTop>200){
 topBtn.style.display="block"
 }else{
 topBtn.style.display="none"
 }
}

topBtn.onclick=function(){
 window.scrollTo({top:0,behavior:"smooth"})
}