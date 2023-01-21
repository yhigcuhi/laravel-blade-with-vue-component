<script setup>
/* import 部品 */
import Gender from '../Gender.vue'; // 性別
// コンポーネント引数
defineProps(['players']) // 選手一覧
</script>
<template>
    <!-- 選手一覧 表 -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>名前（ふりがな）</th>
                <th>チーム</th>
                <th>男性/女性</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="({id, first_name, last_name, first_name_kana, last_name_kana, team, gender}, index) in players" :key="id" :class="index % 2 === 0 ? 'even' : 'odd'">
               <td>{{ index }}</td>
                <td>{{ `${last_name} ${first_name}（${last_name_kana} ${first_name_kana}）` }}</td>
                <td>{{ team?.name }}</td>
                <td>
                    <Gender :gender="gender"/>
                </td>
            </tr>
        </tbody>
    </table>
</template>
<style scoped>
</style>
