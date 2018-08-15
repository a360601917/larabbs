<?php

namespace App\Http\Requests\Api;

//use Dingo\Api\Http\FormRequest;

class ReplyRequest extends FormRequest {

  public function rules() {
    return [
        'content' => 'required|min:2',
    ];
  }

}
