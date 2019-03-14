<?php

namespace App\Http\Requests;

use App\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
{
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
        return [
            'name'      => 'required',
            'lastname'  => 'required',
            'run'       => 'required',

            'email'     => [
                'required', 'email',
                Rule::unique('users')->ignore($this->user)
            ],

            'direccion' => 'required',
            'ciudad'    => 'required',
            'celular'   => 'required',
            'telefono'  => '',

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El campo nombre es obligatorio',
            'lastname.required' => 'El campo apellido es obligatorio',
            'email.required' => 'Ingresa una direccion de Correo Electrónico Válida',
            'email.unique' => 'Ya existe un Usuario Con esta direccion de correo Electrónico',
            'password.required' => 'El Campo password es Requerido',
            'password.min' => 'El password debe ser mayor de 6 caracteres',
            'ciudad.required' => 'Ingrese una ciudad',
            'direccion.required' => 'Ingrese una dirección',
        ];
    }

    public function updateUser(User $user)
    {
        $user->fill([
            'name' => $this->name,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'run' => $this->run,
            'ciudad' => $this->ciudad,
            'direccion' => $this->direccion,
            'celular' => $this->celular,
            'telefono' => $this->telefono,
        ]);
//        if ($this->password != null) {
//            $user->password = bcrypt($this->password);
//        }
        $user->save();

//        $user->profile->update([
//            'twitter' => $this->twitter,
//            'bio' => $this->bio,
//            'profession_id' => $this->profession_id,
//        ]);
//        $user->skills()->sync($this->skills ?: []);
    }
}
