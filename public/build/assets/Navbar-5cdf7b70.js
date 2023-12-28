import{d as y,o,e as n,a as e,b as r,w as s,u as $,m as x,g as a,t as u,f as i,c,i as p,n as m,F as f,h as j,O as b}from"./app-4aa0f750.js";import{A as S}from"./ApplicationMark-de2d5444.js";import{_ as g,a as h,b as T,c as w}from"./ResponsiveNavLink-9673c99a.js";const M={class:"tw-border-b tw-border-gray-100"},C={class:"tw-max-w-7xl tw-mx-auto tw-px-4 sm:tw-px-6 lg:tw-px-8"},P={class:"tw-flex tw-justify-between tw-h-16"},B={class:"tw-flex"},N={class:"tw-shrink-0 tw-flex tw-items-center"},A={class:"tw-hidden tw-space-x-8 sm:tw--my-px sm:tw-ms-10 sm:tw-flex"},F=e("div",null,null,-1),L={class:"tw-hidden sm:tw-flex sm:tw-items-center sm:tw-ms-6"},O={key:0,class:"tw-ms-3 tw-relative"},V={key:1,class:"tw-ms-3 tw-relative"},z={key:0,class:"tw-flex tw-text-sm tw-border-2 tw-border-transparent tw-rounded-full focus:tw-outline-none focus:tw-border-gray-300 tw-transition"},D=["src","alt"],I=e("img",{class:"tw-h-8 w-8 tw-rounded-full tw-object-cover",src:"",alt:"guest"},null,-1),E={key:1,class:"tw-inline-flex tw-rounded-md"},q={type:"button",class:"tw-inline-flex tw-items-center tw-px-3 tw-py-2 tw-border tw-border-transparent tw-text-sm tw-leading-4 tw-font-medium tw-rounded-md tw-text-gray-500 tw-bg-white hover:tw-text-gray-700 focus:tw-outline-none focus:tw-bg-gray-50 active:tw-bg-gray-50 tw-transition tw-ease-in-out tw-duration-150"},G=e("svg",{class:"tw-ms-2 tw--me-0.5 tw-h-4 tw-w-4",xmlns:"http://www.w3.org/2000/svg",fill:"none",viewBox:"0 0 24 24","stroke-width":"1.5",stroke:"currentColor"},[e("path",{"stroke-linecap":"round","stroke-linejoin":"round",d:"M19.5 8.25l-7.5 7.5-7.5-7.5"})],-1),H=e("div",{class:"tw-border-t tw-border-gray-200"},null,-1),J=["onSubmit"],K={class:"tw--me-2 tw-flex tw-items-center sm:tw-hidden"},Q={class:"tw-h-6 tw-w-6",stroke:"currentColor",fill:"none",viewBox:"0 0 24 24"},R={class:"tw-pt-2 tw-pb-3 tw-space-y-1"},U={key:0,class:"tw-pt-4 tw-pb-1 tw-border-t tw-border-gray-200"},W={class:"tw-flex tw-items-center tw-px-4"},X={key:0,class:"tw-shrink-0 tw-me-3"},Y=["src","alt"],Z={class:"ftw-ont-medium tw-text-base tw-text-gray-800"},tt={class:"tw-font-medium tw-text-sm tw-text-gray-500"},et={class:"tw-mt-3 tw-space-y-1"},st=["onSubmit"],ot=e("div",{class:"tw-border-t tw-border-gray-200"},null,-1),rt=e("div",{class:"tw-block tw-px-4 tw-py-2 tw-text-xs tw-text-gray-400"}," Manage Team ",-1),at=e("div",{class:"tw-border-t tw-border-gray-200"},null,-1),nt=e("div",{class:"tw-block tw-px-4 tw-py-2 tw-text-xs tw-text-gray-400"}," Switch Teams ",-1),it=["onSubmit"],ut={class:"tw-flex tw-items-center"},lt={key:0,class:"tw-me-2 tw-h-5 tw-w-5 tw-text-green-400",xmlns:"http://www.w3.org/2000/svg",fill:"none",viewBox:"0 0 24 24","stroke-width":"1.5",stroke:"currentColor"},wt=e("path",{"stroke-linecap":"round","stroke-linejoin":"round",d:"M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"},null,-1),dt=[wt],gt={__name:"Navbar",props:{title:String},setup(ht){const l=y(!1),k=t=>{b.put(route("current-team.update"),{team_id:t.id},{preserveState:!1})},v=()=>{b.post(route("logout"))};return(t,_)=>(o(),n("nav",M,[e("div",C,[e("div",P,[e("div",B,[e("div",N,[r($(x),{href:"/"},{default:s(()=>[r(S,{class:"tw-block tw-h-9 tw-w-auto"})]),_:1})]),e("div",A,[F,r(g,{href:"/",active:t.route().current("home")},{default:s(()=>[a(u(t.$t("words.home")),1)]),_:1},8,["active"]),r(g,{href:"/courses",active:t.route().current("courses.index")},{default:s(()=>[a(u(t.$t("words.courses")),1)]),_:1},8,["active"])])]),e("div",L,[t.$page.props.auth.user?i("",!0):(o(),n("div",O,[r(g,{href:t.route("login")},{default:s(()=>[a(u(t.$t("words.login")),1)]),_:1},8,["href"])])),t.$page.props.auth.user?(o(),n("div",V,[r(T,{align:"right",width:"48"},{trigger:s(()=>[t.$page.props.jetstream.managesProfilePhotos?(o(),n("button",z,[e("img",{class:"tw-h-8 w-8 tw-rounded-full tw-object-cover",src:t.$page.props.auth.user.profile_photo_url,alt:t.$page.props.auth.user.name},null,8,D),I])):(o(),n("span",E,[e("button",q,[a(u(t.$page.props.auth.user.name)+" ",1),G])]))]),content:s(()=>[r(h,{href:t.route("my-courses")},{default:s(()=>[a(" دوراتي ")]),_:1},8,["href"]),r(h,{href:t.route("profile.show")},{default:s(()=>[a(" ملفي ")]),_:1},8,["href"]),t.$page.props.jetstream.hasApiFeatures?(o(),c(h,{key:0,href:t.route("api-tokens.index")},{default:s(()=>[a(" API Tokens ")]),_:1},8,["href"])):i("",!0),H,e("form",{onSubmit:p(v,["prevent"])},[r(h,{as:"button"},{default:s(()=>[a(" تسجيل خروج ")]),_:1})],40,J)]),_:1})])):i("",!0)]),e("div",K,[e("button",{class:"tw-inline-flex tw-items-center tw-justify-center tw-p-2 tw-rounded-md tw-text-gray-400 hover:tw-text-gray-500 hover:tw-bg-gray-100 focus:tw-outline-none focus:tw-bg-gray-100 focus:tw-text-gray-500 tw-transition tw-duration-150 tw-ease-in-out",onClick:_[0]||(_[0]=d=>l.value=!l.value)},[(o(),n("svg",Q,[e("path",{class:m({"tw-hidden":l.value,"tw-inline-flex":!l.value}),"stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",d:"M4 6h16M4 12h16M4 18h16"},null,2),e("path",{class:m({"tw-hidden":!l.value,"tw-inline-flex":l.value}),"stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",d:"M6 18L18 6M6 6l12 12"},null,2)]))])])])]),e("div",{class:m([{"tw-block":l.value,"tw-hidden":!l.value},"sm:tw-hidden"])},[e("div",R,[r(w,{href:t.route("home"),active:t.route().current("home")},{default:s(()=>[a(u(t.$t("words.home")),1)]),_:1},8,["href","active"]),r(w,{href:t.route("courses.index"),active:t.route().current("courses.index")},{default:s(()=>[a(u(t.$t("words.courses")),1)]),_:1},8,["href","active"])]),t.$page.props.auth.user?(o(),n("div",U,[e("div",W,[t.$page.props.jetstream.managesProfilePhotos?(o(),n("div",X,[e("img",{class:"tw-h-10 tw-w-10 tw-rounded-full tw-object-cover",src:t.$page.props.auth.user.profile_photo_url,alt:t.$page.props.auth.user.name},null,8,Y)])):i("",!0),e("div",null,[e("div",Z,u(t.$page.props.auth.user.name),1),e("div",tt,u(t.$page.props.auth.user.email),1)])]),e("div",et,[r(w,{href:t.route("profile.show"),active:t.route().current("profile.show")},{default:s(()=>[a(" Profile ")]),_:1},8,["href","active"]),t.$page.props.jetstream.hasApiFeatures?(o(),c(w,{key:0,href:t.route("api-tokens.index"),active:t.route().current("api-tokens.index")},{default:s(()=>[a(" API Tokens ")]),_:1},8,["href","active"])):i("",!0),e("form",{method:"POST",onSubmit:p(v,["prevent"])},[r(w,{as:"button"},{default:s(()=>[a(" Log Out ")]),_:1})],40,st),t.$page.props.jetstream.hasTeamFeatures?(o(),n(f,{key:1},[ot,rt,r(w,{href:t.route("teams.show",t.$page.props.auth.user.current_team),active:t.route().current("teams.show")},{default:s(()=>[a(" Team Settings ")]),_:1},8,["href","active"]),t.$page.props.jetstream.canCreateTeams?(o(),c(w,{key:0,href:t.route("teams.create"),active:t.route().current("teams.create")},{default:s(()=>[a(" Create New Team ")]),_:1},8,["href","active"])):i("",!0),t.$page.props.auth.user.all_teams.length>1?(o(),n(f,{key:1},[at,nt,(o(!0),n(f,null,j(t.$page.props.auth.user.all_teams,d=>(o(),n("form",{key:d.id,onSubmit:p(ct=>k(d),["prevent"])},[r(w,{as:"button"},{default:s(()=>[e("div",ut,[d.id==t.$page.props.auth.user.current_team_id?(o(),n("svg",lt,dt)):i("",!0),e("div",null,u(d.name),1)])]),_:2},1024)],40,it))),128))],64)):i("",!0)],64)):i("",!0)])])):i("",!0)],2)]))}};export{gt as _};
