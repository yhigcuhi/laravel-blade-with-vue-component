/* import */
import './bootstrap'; // グローバル変数に設定など
import {createApp} from 'vue'; // import vue
import SampleTable from './components/SampleTable.vue';

/**
 * 参考：LaravelのBladeにVueコンポーネントを組み込む https://blog.shonansurvivors.com/entry/laravel-blade-vue
 * 参考：【Laravel】BladeファイルでVue3のコンポーネントを利用する方法【Vue3】 https://tekrog.com/vue3-components-in-blade/
 */
// Vueをコンポーネントとして配布（使える先は #app配下のみ） 参考：【Laravel】BladeファイルでVue3のコンポーネントを利用する方法【Vue3】 https://tekrog.com/vue3-components-in-blade/
createApp({
    // Vueをコンポーネントとして配布するもの
    components:{
        // 'test-table-component' : SampleTable　// <test-table-component></test-table-component>のカスタムタグで SampleTable.vue描画
        SampleTable, // key指定なし <sample-table><・sample-table>のカスタムタグで SampleTable.vue描画
    }
})
.mount('#app') // 使える先は #app配下のみ (id=appをlayoutに置くとかすれば特に問題ない)
;
