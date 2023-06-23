<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;
use App\Models\Browser;

class FavoritesController extends Controller
{
    public function index()
    {
        // відображення шаблону сторінки 'favorites' із resources/views/favorites.blade.php
        return view('favorites');
    }

    public function favorites()
    {
        // виконує запит до бази даних для отримання списку 'вподобань' користувача
        $favorites = Favorite::where('user_id', auth()->user()->id)
        // включаємо зв'язок з browser, щоб отримати пов'язані дані про браузер з іншої таблиці
            ->with('browser')
            ->get();

        // Отриманий список 'вподобань' передається до масиву 'favorites' за допомогою функції compact().
        return view('favorites', compact('favorites'));
    }

    public function removeFromFavorites(Browser $browser)
    {
        // Метод виконує відкріплення (detach) браузера від списку 'вподобань' користувача, 
        // використовуючи функцію detach() з відношенням favorites() моделі користувача, 
        // доступною через auth()->user()
        auth()->user()->favorites()->detach($browser);

        // Після видалення відбувається перенаправлення назад на попередню сторінку 
        // з повідомленням про успішне видалення браузера зі списку "вподобань".
        return redirect()->back()->with('success', 'Browser removed from favorites.');
    }

}

