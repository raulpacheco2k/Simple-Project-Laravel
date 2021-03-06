<?php

namespace App\Http\Requests;

use App\Models\Brand;
use Illuminate\Foundation\Http\FormRequest;
use \Illuminate\Support\Str;

class BrandRequest extends FormRequest
{
    protected function prepareForValidation()
    {
        $this->merge(['slug' => Str::slug($this->name)]);
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return Brand::rules();
    }
}
