import{_ as r}from"./Navbar-8a050acb.js";import{C as m,_ as w}from"./CourseCard-66fa36da.js";import{Z as v,j as l,e as i,b as n,a as s,t as o,w as g,F as u,o as e,g as b}from"./app-78216c9e.js";import{_ as x}from"./_plugin-vue_export-helper-c27b6911.js";import"./ApplicationMark-23b5ee54.js";import"./ResponsiveNavLink-61a6ae19.js";const f={components:{CourseCard:m,Footer:w,Navbar:r,Head:v},props:["users","course","enrollments","invoice"],methods:{}},y={class:"container"},k={class:"row"},p={class:"col-12 col-lg-10 mx-auto"},N={class:"tw-flex tw-justify-between tw-items-center mt-5"},z=s("h5",{class:"font-weight-semibold"},"تفاصيل الفاتورة",-1),C={key:0},F=["href"],L={key:1},j=s("img",{class:"tw-center",src:"https://i.ibb.co/kMHzJWW/checked.png",width:"80",height:"80"},null,-1),H=[j],M=s("hr",null,null,-1),B={class:"row"},V={class:"col-md-4"},W=s("h6",{class:"text-sm font-weight-semibold mb-1"},"الدورة",-1),O={class:"text-sm"},S={class:"col-md-8 mb-4"},q={class:"card border shadow-xs"},D={class:"card-body"},E={class:"tw-flex tw-justify-between mx-6 mt-5"},G={class:""},J=s("h4",null,"فاتورة ضريبية",-1),T={class:"font-weight-semibold tw-text-gray-600"},Z=s("img",{src:"/WM-LOGO.png",alt:"Logo",class:"w-10 tw-self-center"},null,-1),A=s("hr",{class:"horizontal mb-4 dark mx-6"},null,-1),I={class:"tw-grid tw-grid-col-2 sm:tw-grid-cols-2 md:tw-grid-cols-2 lg:tw-grid-cols-2 mt-4 mx-6"},K=s("div",null,[s("div",{class:"my-1"},"من:"),s("div",{class:"my-1 tw-text-black"},"شركة مركز احترافية المدرب للتدريب"),s("div",{class:"my-1 tw-text-black"},"الرياض، حي اليرموك"),s("div",{class:"my-1 tw-text-black"},"311555192400003")],-1),P=s("div",{class:"my-1"},"الى:",-1),Q={class:"my-1 tw-text-black"},R=s("div",{class:"my-1 tw-text-black"},null,-1),U={class:"my-1 tw-text-black"},X=s("hr",{class:"horizontal mb-4 dark mx-6"},null,-1),Y={class:"tw-grid tw-grid-col-2 sm:tw-grid-cols-2 md:tw-grid-cols-2 lg:tw-grid-cols-2 mt-4 mx-6"},$=s("div",{class:"my-1"},"الوصف:",-1),ss={class:"my-1 tw-text-black"},ts=s("div",{class:"my-1"},"السعر:",-1),os={class:"my-1 tw-text-black"},is=s("hr",{class:"horizontal mb-4 dark mx-6"},null,-1),es={class:"tw-grid tw-grid-cols-2 sm:tw-grid-cols-2 md:tw-grid-cols-2 lg:tw-grid-cols-2 mt-4 mx-5"},cs=["src"],ls={class:"tw-grid tw-grid-cols-2"},ns=s("div",{class:"my-1"},"المجموع:",-1),ds={class:"my-1 tw-text-black"},as=s("div",{class:"my-1"},"الضريبة:",-1),_s={class:"my-1 tw-text-black"},hs=s("div",{class:"my-1"},"الإجمالي:",-1),rs={class:"my-1 tw-text-black"},ms=s("div",{class:"tw-flex tw-justify-between tw-col-span-2"},[s("svg",{width:"40",height:"40",class:"mx-0.5"},[s("image",{class:"inline","xlink:href":"https://www.svgrepo.com/show/328112/visa.svg",src:"https://www.svgrepo.com/show/328112/visa.svg",width:"40",height:"40"})]),s("svg",{width:"20",height:"40",class:"mx-0.5"},[s("image",{class:"inline","xlink:href":"https://www.svgrepo.com/show/163750/mastercard.svg",src:"https://www.svgrepo.com/show/163750/mastercard.svg",width:"20",height:"40"})]),s("svg",{width:"40",height:"40",class:"mx-0.5"},[s("image",{class:"inline","xlink:href":"https://upload.wikimedia.org/wikipedia/commons/f/fb/Mada_Logo.svg",src:"https://upload.wikimedia.org/wikipedia/commons/f/fb/Mada_Logo.svg",width:"40",height:"40"})]),s("svg",{width:"40",height:"40",class:"mx-0.5"},[s("image",{class:"inline","xlink:href":"https://www.svgrepo.com/show/303191/apple-pay-logo.svg",src:"https://www.svgrepo.com/show/303191/apple-pay-logo.svg",width:"40",height:"40"})])],-1),ws=s("hr",{class:"horizontal mb-4 dark mx-6"},null,-1),vs={key:0,class:"tw-mx-12 my-5"},gs=["href"],us={key:1,class:"tw-text-white tw-bg-green-700 tw-rounded-full tw-mx-8 tw-px-6 tw-py-1 tw-font-bold tw-border-solid border-2 tw-border-green-700"};function bs(c,xs,t,fs,ys,ks){const d=l("Navbar"),a=l("Head"),_=l("center"),h=l("Footer");return e(),i(u,null,[n(d),n(a,{title:c.$t("words.invoice")+" "+t.invoice.number},null,8,["title"]),s("main",y,[s("div",k,[s("div",p,[s("div",N,[z,s("div",null,[t.invoice.paid_at===null?(e(),i("div",C,[s("a",{class:"btn-grad text-xs",href:c.route("invoices.noon.pay",{id:t.enrollments.invoice_id})},"السداد الآن",8,F)])):(e(),i("div",L,H))])]),M,s("div",B,[s("div",V,[W,s("p",O,o(t.invoice.course.title),1)]),s("div",S,[s("div",q,[s("div",D,[s("div",E,[s("div",G,[J,s("h4",T,"#"+o(t.invoice.number),1)]),Z]),A,s("div",I,[K,s("div",null,[P,s("div",Q,o(t.invoice.user.name),1),R,s("div",U,o(t.invoice.user.phone),1)])]),X,s("div",Y,[s("div",null,[$,s("div",ss,o(t.invoice.course.title),1)]),s("div",null,[ts,s("div",os,o(t.invoice.course.price),1)])]),is,s("div",es,[s("div",null,[s("img",{src:t.invoice.invoice_qr_image,alt:"Logo",class:"tw-align-items-end w-60"},null,8,cs)]),s("div",ls,[ns,s("div",ds,o(t.invoice.sub_total),1),as,s("div",_s,o(t.invoice.tax),1),hs,s("div",rs,o(t.invoice.grand_total),1),ms])]),ws,t.invoice.paid_at===null?(e(),i("div",vs,[s("a",{class:"btn-grad",href:c.route("invoices.noon.pay",{id:t.enrollments.invoice_id})},"السداد الآن",8,gs)])):(e(),i("div",us,[n(_,null,{default:g(()=>[b(o(c.$t("words.paid")),1)]),_:1})]))])])])])])])]),n(h,{class:"container"})],64)}const js=x(f,[["render",bs]]);export{js as default};
