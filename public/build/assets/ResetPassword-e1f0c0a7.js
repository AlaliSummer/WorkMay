import{T as c,e as f,b as e,u as o,w as i,F as _,o as g,Z as V,a as r,n as v,g as b,t as k,i as $}from"./app-65d6ff2e.js";import{A as y}from"./AuthenticationCard-bb93141f.js";import{_ as m}from"./InputError-5cda47fe.js";import{_ as n}from"./InputLabel-e2aaf2ba.js";import{_ as h}from"./PrimaryButton-69d3683d.js";import{_ as d}from"./TextInput-7cfe33a3.js";import"./_plugin-vue_export-helper-c27b6911.js";const S=["onSubmit"],q={class:"mt-4"},B={class:"mt-4"},C={class:"tw-flex tw-items-center tw-justify-end tw-mt-4"},j={__name:"ResetPassword",props:{email:String,token:String},setup(p){const u=p,s=c({token:u.token,email:u.email,password:"",password_confirmation:""}),w=()=>{s.post(route("password.update"),{onFinish:()=>s.reset("password","password_confirmation")})};return(l,a)=>(g(),f(_,null,[e(o(V),{title:"Reset Password"}),e(y,null,{logo:i(()=>[]),default:i(()=>[r("form",{onSubmit:$(w,["prevent"])},[r("div",null,[e(n,{for:"email",value:l.$t("words.email")},null,8,["value"]),e(d,{id:"email",modelValue:o(s).email,"onUpdate:modelValue":a[0]||(a[0]=t=>o(s).email=t),type:"email",dir:"ltr",class:"tw-mt-1 tw-block tw-w-full",required:"",autofocus:"",autocomplete:"username"},null,8,["modelValue"]),e(m,{class:"tw-mt-2",message:o(s).errors.email},null,8,["message"])]),r("div",q,[e(n,{for:"password",value:l.$t("words.password")},null,8,["value"]),e(d,{id:"password",modelValue:o(s).password,"onUpdate:modelValue":a[1]||(a[1]=t=>o(s).password=t),type:"password",class:"tw-mt-1 tw-block tw-w-full",dir:"ltr",required:"",autocomplete:"new-password"},null,8,["modelValue"]),e(m,{class:"tw-mt-2",message:o(s).errors.password},null,8,["message"])]),r("div",B,[e(n,{for:"password_confirmation",value:l.$t("auth.confirm-password")},null,8,["value"]),e(d,{id:"password_confirmation",modelValue:o(s).password_confirmation,"onUpdate:modelValue":a[2]||(a[2]=t=>o(s).password_confirmation=t),type:"password",class:"tw-mt-1 tw-block tw-w-full",dir:"ltr",required:"",autocomplete:"new-password"},null,8,["modelValue"]),e(m,{class:"tw-mt-2",message:o(s).errors.password_confirmation},null,8,["message"])]),r("div",C,[e(h,{class:v({"tw-opacity-25":o(s).processing}),disabled:o(s).processing},{default:i(()=>[b(k(l.$t("auth.reset-password")),1)]),_:1},8,["class","disabled"])])],40,S)]),_:1})],64))}};export{j as default};
