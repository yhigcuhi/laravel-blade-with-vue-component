<script setup>
defineProps(['title', 'idAttribute'])
</script>
<template>
    <!-- １フォームグループ共通化（ダルいので） -->
    <div class="form-group">
        <label v-show="title" :for="idAttribute" for="search">{{ title }}</label>
        <slot />
    </div>
</template>
