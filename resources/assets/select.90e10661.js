import"./vue.4c5758a0.js";import{C as c,e as h,f as O,E as b}from"./index.fc627453.js";import{d as v}from"./@vueuse.67682d36.js";import{u as C}from"./remoteOptions.2f57667f.js";import{d as g,w as j,h as y}from"./@vue.87afd1fa.js";import{F,S}from"./ant-design-vue.e954adc4.js";import"./@babel.dd651e2b.js";import"./regenerator-runtime.8e24db72.js";import"./js-md5.3cdd41c4.js";import"./vue-router.9a2c52dc.js";import"./js-cookie.31874410.js";import"./lodash.28c974ad.js";import"./spark-md5.2cc5764b.js";import"./axios.e3200588.js";import"./@ant-design.8c82b126.js";import"./@ctrl.fa7cbd46.js";/* empty css                     */import"./dayjs.0743a87f.js";import"./sortablejs.412b554c.js";import"./clipboard.89482ba1.js";import"./markdown-it.39ce48f9.js";import"./entities.0d2c0164.js";import"./uc.micro.981ceb7b.js";import"./mdurl.ef76b4dc.js";import"./linkify-it.92c30060.js";import"./markdown-it-emoji.e3e91710.js";import"./escape-html.e5dfadb9.js";import"./prismjs.169105cf.js";import"./diacritics.6be19c75.js";import"./markdown-it-container.512a5043.js";import"./markdown-it-anchor.c88e5394.js";import"./markdown-it-attrs.3af5ab50.js";import"./markdown-it-table-of-contents.8a4ce16f.js";import"./@kangc.52338b19.js";import"./resize-observer-polyfill.8deb1e21.js";import"./vue-types.6e6d84ba.js";import"./dom-align.f1b5d360.js";import"./lodash-es.0ea26897.js";import"./async-validator.5d25c98b.js";import"./scroll-into-view-if-needed.5191fdbf.js";import"./compute-scroll-into-view.6058b3be.js";import"./vue-demi.24ed2461.js";var lt=g({name:"ExSelect",props:{changeLoadOptions:{type:Array,default:[]},remote:Object,options:Array},emits:["update:options"],setup(o,t){const i=F.useInjectFormItemContext();j(()=>t.attrs.value,r=>{i.onFieldChange()});const p=c(),m=v(o,"options",t.emit),{remoteOptionsDebounce:n,remoteOptions:e}=C(o,m);u(),h(t.attrs.value)||(Array.isArray(t.attrs.value)?e(""):e(t.attrs.value));function u(){o.changeLoadOptions.forEach(r=>{f(r.params,r.updateObject,t.attrs.value)})}function f(r,d,l){r.data.value=l,p&&(r.data.data=p.submitData()),O(r).then(a=>{if(a.data)for(let s in a.data)b(d,s,a.data[s])})}return{remoteOptionsDebounce:n,remoteOptions:e,options:m}},render(o){let t=Object.assign({onDropdownVisibleChange:i=>{i&&this.remoteOptions("")}},o.$attrs);return t.showSearch&&(t.onSearch=i=>{this.remoteOptionsDebounce(i)}),!o.$attrs.options&&o.options&&(t.options=o.options),y(S,t,o.$slots)}});export{lt as default};
