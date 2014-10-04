<?php


class Profile extends Eloquent {

	protected $table = 'profiles';

	protected $fillable = ['firstname','lastname','nickname','phonenumber','photo','cv'];

	protected $hidden = array('password', 'remember_token');

	public static $errors;

	public static $rules = [		'firstname' => 'required', 
    								'lastname' => 'required',
    								'nickname' => 'required',
    								'phonenumber' => 'required',
    								'photo' => 'required',
    								'cv' => 'required'
    						];

    




}