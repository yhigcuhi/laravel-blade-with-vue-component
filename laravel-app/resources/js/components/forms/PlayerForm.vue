<script setup>
/* import vue */
import {computed, reactive, ref} from 'vue';
// TODO: vuex?
/* import axios */
import axios from 'axios';
/* import validator */
import { useVuelidate } from '@vuelidate/core'
import { required, maxLength } from '@vuelidate/validators'
/* import 部品 */
import FormGroup from '../labels/FormGroup.vue';
import TextInput from '../inputs/TextInput.vue';
import PrimaryButton from '../buttons/PrimaryButton.vue';

// 引数: {playerId: 編集選手, ?endpoint: 通信先URLエンドポイント, ?handleOnSubmit: (data) => void}
const props = defineProps(['playerId', 'endpoint', 'handleOnSubmit']);
// 入力補完: 登録モード
const isCreate = computed(() => !props.playerId)

/* 変数 */
// フォーム
const form = reactive({
    last_name: null, // 名前（姓）（漢字）
    first_name: null, // 名前（名）（漢字）
    last_name_kana: null, // 名前（姓）（ふりがな）
    first_name_kana: null, // 名前（名）（ふりがな）
    belong_team_cd: null, // 所属チームコード
    gender: null, // 性別（Enum）
});
// バリデーションルール
const rules = {
    last_name: { required, maxLength(15) }
}

// computed(() => form 書き換え? by 編集時); // TODO: vuex?
// 送信中監視 (true:送信中 / false:それ以外)
const processing = ref(false);
// 送信可不可
const canSubmit = computed(() => !processing.value);

/* 関数 */
/**
 * submit ハンドラー（Form vueの中での）
 */
const onSubmit = () => {
    // 前提条件
    if (processing.value) return; // 多重送信不可
    processing.value = true;

    // ハンドラー存在時実行
    if (props.handleOnSubmit && _.isFunction(props.handleOnSubmit)) {
        // ハンドラー実行し終了
        props.handleOnSubmit({...form});
        processing.value = false;
        return;
    }
    // バリデーション実行


    // 送信処理実行
    axios(props.endpoint, isCreate.value ? 'POST' : 'PUT', {...form})
        .then()
        .catch()
        .finally(() => processing.value = false)
    ;
};
</script>
<template>
    <!-- 選手 フォーム -->
    <form @submit.prevent="onSubmit">
        <FormGroup title="名前（姓）">
            <TextInput type="text" v-model="form.last_name" />
        </FormGroup>
        <FormGroup title="名前（名）">
            <TextInput type="text" v-model="form.first_name" />
        </FormGroup>
        <FormGroup title="ふりがな（姓）">
            <TextInput type="text" v-model="form.last_name_kana" />
        </FormGroup>
        <FormGroup title="ふりがな（名）">
            <TextInput type="text" v-model="form.first_name_kana" />
        </FormGroup>
        <!-- submit -->
        <FormGroup>
            <PrimaryButton class="btn btn-success" :class="{ 'opacity-25': processing }" :disabled="canSubmit">
                {{ isCreate ? '登録' : '更新' }}
            </PrimaryButton>
        </FormGroup>
    </form>
</template>
