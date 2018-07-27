<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use App\Iou;


class IouRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;

        // switch ($this->route()->getActionMethod()) {
        //     case 'store':
        //     case 'create':
        //         return auth()->user()->can('create', Content::class);
        //     default:
        //         return auth()->user()->can($this->route()->getActionMethod(), $this->route()->parameters['content']);
        // }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {        
        return [  
            //'url' => 'required|url',
            'amount' => 'required|integer||between:100,5000',
            'repayment_repeat' => 'required|in:once,monthly',
            'repayment_delay_value' => 'required|integer|min:1',
            'repayment_delay_unit' => 'required|in:days,weeks,months',
        ];
        
    }

    public function messages()
    {
        return [
            'amount.required' => __('iou.error_no_amount'),
            'amount.between' => __('iou.error_amount_out_of_range'),
            'occurence.required' => __('iou.error_no_occurence'),
            'occurence.in' => __('iou.error_invalid_occurence'),
            'repayment_delay_value.gte' => __('iou.error_invalid_delay_value')
        ];
    }


}
