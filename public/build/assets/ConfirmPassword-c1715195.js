import{T as l,d,e as c,b as o,u as e,w as r,F as u,o as p,Z as f,a,n as _,g as w,i as b}from"./app-59e77b7c.js";import{A as g}from"./AuthenticationCard-5e2a3f32.js";import{_ as h}from"./AuthenticationCardLogo-c594aa48.js";import{_ as x}from"./InputError-0544a516.js";import{_ as v}from"./InputLabel-a933a796.js";import{_ as y}from"./PrimaryButton-3c8ee4d8.js";import{_ as V}from"./TextInput-3e8b809c.js";import"./_plugin-vue_export-helper-c27b6911.js";const C=a("div",{class:"mb-4 text-sm text-gray-600"}," This is a secure area of the application. Please confirm your password before continuing. ",-1),$=["onSubmit"],k={class:"flex justify-end mt-4"},z={__name:"ConfirmPassword",setup(A){const s=l({password:""}),t=d(null),n=()=>{s.post(route("password.confirm"),{onFinish:()=>{s.reset(),t.value.focus()}})};return(B,i)=>(p(),c(u,null,[o(e(f),{title:"Secure Area"}),o(g,null,{logo:r(()=>[o(h)]),default:r(()=>[C,a("form",{onSubmit:b(n,["prevent"])},[a("div",null,[o(v,{for:"password",value:"Password"}),o(V,{id:"password",ref_key:"passwordInput",ref:t,modelValue:e(s).password,"onUpdate:modelValue":i[0]||(i[0]=m=>e(s).password=m),type:"password",class:"mt-1 block w-full",required:"",autocomplete:"current-password",autofocus:""},null,8,["modelValue"]),o(x,{class:"mt-2",message:e(s).errors.password},null,8,["message"])]),a("div",k,[o(y,{class:_(["ms-4",{"opacity-25":e(s).processing}]),disabled:e(s).processing},{default:r(()=>[w(" Confirm ")]),_:1},8,["class","disabled"])])],40,$)]),_:1})],64))}};export{z as default};