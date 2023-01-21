<script setup>
/* import vue */
import {computed} from 'vue';
// 引数 = {gender: 性別定数文字 }
const props = defineProps(['gender']);
// 性別表示値
const gender = computed(() => props?.gender === 'MEN' ? '男性' : '女性');
</script>
<template>
<span class="mx-0 px-0">{{ gender }}</span>
</template>
