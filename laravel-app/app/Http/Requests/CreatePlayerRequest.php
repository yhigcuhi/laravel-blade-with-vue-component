<?php

namespace App\Http\Requests;

use App\Enum\Gender;
use App\Enum\RegExp;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

/**
 * 選手 新規登録リクエスト
 */
class CreatePlayerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // 認可 = 特になし
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'last_name' => ['required', 'string', 'regex:'.RegExp::ONLY_KANJI->value, 'max:15'],
            'first_name' => ['required', 'string', 'regex:'.RegExp::ONLY_KANJI->value, 'max:15'],
            'last_name_kana' => ['required', 'string', 'regex:'.RegExp::ONLY_KANA->value, 'max:30'],
            'first_name_kana' => ['required', 'string', 'regex:'.RegExp::ONLY_KANA->value, 'max:30'],
            'belong_team_cd' => ['required', 'exists:App\Models\Teams,team_cd'], // チームコード 相対
            'gender' => ['required', new Enum(Gender::class)],
        ];
    }
}
