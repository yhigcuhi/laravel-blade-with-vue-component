<script setup>
/* import vue */
import { onMounted, ref } from 'vue';

// 引数: v-model
defineProps(['modelValue']);
// イベント: 値更新デフォルト
defineEmits(['update:modelValue']);

/* 変数 */
// 入力値
const input = ref(null);
// 値変更イベンんと発火
onMounted(() => {
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus();
    }
});
</script>

<template>
    <input
        class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
        :value="modelValue"
        @input="$emit('update:modelValue', $event.target.value)"
        ref="input"
    >
</template>
