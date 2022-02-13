const mission_btn=document.getElementById('mission_btn');
const experience_btn=document.getElementById('experience_btn');
const mission_content=document.getElementById('mission');
const experience_content=document.getElementById('experience');


mission_btn.addEventListener('click',()=>{
    experience_content.style.display="none";
    mission_content.style.display="flex";
    mission_btn.className="py-4 px-6 mr-4 bg-slate-200 border-b-8 border-amber-400";
    experience_btn.className="";

});
experience_btn.addEventListener('click',()=>{
    experience_content.style.display="flex";
    mission_content.style.display="none";
    experience_btn.className="py-4 px-6 mr-4 bg-slate-200 border-b-8 border-amber-400";
    mission_btn.className="";
});