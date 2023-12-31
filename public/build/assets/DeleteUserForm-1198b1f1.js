import{d as u,T as f,e as w,a as e,b as o,w as t,o as y,g as a,u as l,y as h,n as v}from"./app-65d6ff2e.js";import{a as x,b}from"./DialogModal-cf2441ec.js";import{_ as m}from"./DangerButton-ecff512e.js";import{_ as g}from"./InputError-5cda47fe.js";import{_ as k}from"./SecondaryButton-3509823b.js";import{_ as C}from"./TextInput-7cfe33a3.js";import"./SectionTitle-6e3fd4ad.js";import"./_plugin-vue_export-helper-c27b6911.js";const D={class:"row"},V={class:"col-12 col-lg-10 mx-auto px-4"},$=e("hr",null,null,-1),A={class:"row"},U=e("div",{class:"col-md-4"},[e("h5",{class:"font-weight-semibold"},"Delete Account"),e("br"),e("p",{class:"text-sm"},"Permanently delete your account.")],-1),B={class:"col-md-8 mb-4"},K=e("div",{class:"max-w-xl text-sm text-gray-600"}," Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain. ",-1),N={class:"mt-5"},P={class:"mt-4"},G={__name:"DeleteUserForm",setup(T){const r=u(!1),n=u(null),s=f({password:""}),_=()=>{r.value=!0,setTimeout(()=>n.value.focus(),250)},d=()=>{s.delete(route("current-user.destroy"),{preserveScroll:!0,onSuccess:()=>c(),onError:()=>n.value.focus(),onFinish:()=>s.reset()})},c=()=>{r.value=!1,s.reset()};return(E,i)=>(y(),w("div",D,[e("div",V,[$,e("div",A,[U,e("div",B,[o(x,null,{content:t(()=>[K,e("div",N,[o(m,{onClick:_},{default:t(()=>[a(" Delete Account ")]),_:1})]),o(b,{show:r.value,onClose:c},{title:t(()=>[a(" Delete Account ")]),content:t(()=>[a(" Are you sure you want to delete your account? Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account. "),e("div",P,[o(C,{ref_key:"passwordInput",ref:n,modelValue:l(s).password,"onUpdate:modelValue":i[0]||(i[0]=p=>l(s).password=p),type:"password",class:"mt-1 block w-3/4",placeholder:"Password",autocomplete:"current-password",onKeyup:h(d,["enter"])},null,8,["modelValue","onKeyup"]),o(g,{message:l(s).errors.password,class:"mt-2"},null,8,["message"])])]),footer:t(()=>[o(k,{onClick:c},{default:t(()=>[a(" Cancel ")]),_:1}),o(m,{class:v(["ms-3",{"opacity-25":l(s).processing}]),disabled:l(s).processing,onClick:d},{default:t(()=>[a(" Delete Account ")]),_:1},8,["class","disabled"])]),_:1},8,["show"])]),_:1})])])])]))}};export{G as default};
