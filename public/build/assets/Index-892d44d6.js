import{_ as h}from"./Navbar-021a2c51.js";import{C as b,F as v}from"./CourseCard-1a135683.js";import{_ as g}from"./InputError-98b28b11.js";import{_ as w}from"./InputLabel-6e8217bb.js";import{_ as x}from"./TextInput-0f842391.js";import{Z as y,T as I,j as a,e as $,b as r,w as C,F as N,o as V,a as s,t as l,i as k,k as i,v as m}from"./app-ad360599.js";import{_ as E}from"./_plugin-vue_export-helper-c27b6911.js";import"./ApplicationMark-d027eba5.js";const F={components:{CourseCard:b,Footer:v,Navbar:h,Head:y,InputError:g,InputLabel:w,TextInput:x},props:["users","courses","old_courses","upcoming_courses","course"],data(){return{form:I({name:"",phone:""})}},mounted(){this.form.name=this.$page.props.auth.user.name,this.form.phone=this.$page.props.auth.user.phone},methods:{submit(){this.form.post(route("courses.invoices",this.course.id))}}},B={class:"main-content max-height-vh-100 h-100"},H=s("div",{class:"pt-5 pb-6 bg-cover",style:{"background-image":"url('/img/header-blue-purple.jpg')"}},null,-1),L={class:"tw-container px-3 tw-py-20 lg:tw-w-1/2 tw-mx-auto"},T={class:"tw-col-span-6 sm:tw-col-span-4"},U={class:"mb-3"},j={class:"col-span-6 sm:col-span-4"},q={class:"mb-3"},D={class:"col-span-6 sm:col-span-4"},M={class:"mb-3"},P={class:"col-span-6 sm:col-span-4"},S=s("div",{class:"mb-3"},[s("input",{dir:"auto",type:"text",value:"شمال الرياض - قاعة فندقية",class:"form-control",disabled:""})],-1),Z=s("div",{id:"instructions"},[s("ul",{class:"tw-list-disc tw-px-5"},[s("li",null,"بعد السداد يتم إرسال رسالة الى البريد الإلكتروني الخاص بكم تحتوي على موقع الدورة."),s("li",null,"يتم إرسال رسالة تذكير قبل بدء الدورة بيومين.")])],-1),z=s("div",null,[s("button",{type:"submit",class:"btn-grad-secondary"}," موافق، توجه الى صفحة السداد ")],-1);function A(e,o,u,G,n,c){const p=a("Head"),_=a("Navbar"),d=a("InputError"),f=a("PublicLayout");return V(),$(N,null,[r(p,{title:e.$t("words.confirm-registration")},null,8,["title"]),r(_),r(f,null,{default:C(()=>[s("main",B,[H,s("div",L,[s("h2",null,l(e.$t("words.confirm-registration")),1),s("form",{onSubmit:o[3]||(o[3]=k((...t)=>c.submit&&c.submit(...t),["prevent"]))},[s("div",T,[s("label",null,l(e.$t("words.name")),1),s("div",U,[i(s("input",{dir:"auto","onUpdate:modelValue":o[0]||(o[0]=t=>n.form.name=t),class:"form-control",required:""},null,512),[[m,n.form.name]])]),r(d,{message:n.form.errors.name,class:"mt-2"},null,8,["message"])]),s("div",j,[s("label",null,l(e.$t("words.phone")),1),s("div",q,[i(s("input",{dir:"ltr",placeholder:"9665xxxxxxxx",type:"text","onUpdate:modelValue":o[1]||(o[1]=t=>n.form.phone=t),class:"form-control",required:""},null,512),[[m,n.form.phone]])]),r(d,{message:n.form.errors.phone,class:"mt-2"},null,8,["message"])]),s("div",D,[s("label",null,l(e.$t("words.course")),1),s("div",M,[i(s("input",{dir:"auto",type:"text","onUpdate:modelValue":o[2]||(o[2]=t=>u.course.title=t),class:"form-control",disabled:""},null,512),[[m,u.course.title]])])]),s("div",P,[s("label",null,l(e.$t("words.location")),1),S]),Z,z],32)])])]),_:1})],64)}const ss=E(F,[["render",A]]);export{ss as default};