<script setup>
// 引数: {message: エラーメッセージ等}
defineProps(['message']);
</script>

<template>
    <div v-show="message">
        <p class="text-sm text-red-600">
            {{ message }}
        </p>
    </div>
</template>
