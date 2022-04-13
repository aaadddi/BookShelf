<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\all_book;
use App\Models\wishlist;
use App\Models\cart;
use App\Models\owned;
class features extends Controller
{   
    //Cards view
    public function showBookCards()
    {
        $cardData = all_book::all();
        return view('home', ['cardDatas' => $cardData]);
    }
    public function showWishListCard()
    {
        $cardData = wishlist::all();

        return view('wishlist', ['cardDatas' => $cardData]);
    }
    public function showOwnedListCard()
    {
        $cardData = owned::all();

        return view('owned', ['cardDatas' => $cardData]);
    }
    public function showCardListCard()
    {
        $cardData = cart::all();

        return view('cart', ['cardDatas' => $cardData]);
    }


    //Account Features
    public function changeName(Request $req)
    {    $req->validate([
            
        'newName' => 'string|regex:/^[A-Za-z_ ]+$/',

    ]);
        $newName = $req->input('newName');
        if (session('loggedIn')) {
            if (
                $newName ==
                DB::table('users')
                    ->where('email', session('loggedInId'))
                    ->value('name')
            ) {
                return redirect('account');
            }
            if (
                DB::update(
                    "update users set name ='$newName'  where email = ?",
                    [session('loggedInId')]
                )
            ) {
                $req->session('displayName')->put('displayName', $newName);
                return redirect('account');
            }
        }
    }
    public function changePassword(Request $req)
    {
        $oldPassword = $req->input('oldPassword');
        $newPassword = $req->input('newPassword');

        if (
            $oldPassword ==
            DB::table('users')
                ->where('email', session('loggedInId'))
                ->value('password')
        ) {
            DB::update(
                "update users set password ='$newPassword'  where email = ?",
                [session('loggedInId')]
            );
            return redirect('account');
        } else {
            return 'Password does not match with the previous password';
        }
    }
    public function deleteAccount(Request $req)
    {
        $confirmation = $req->input('confirmDeleteAccount');
        if ($confirmation == 'YES') {
            DB::delete('delete from users where email= ?', [
                session('loggedInId'),
            ]);
            session()->pull('loggedIn', '');
            session()->pull('displayName', '');
            session()->pull('loggedInId', '');
            return redirect('/');
        } else {
            return redirect('account');
        }
    }
    public function addAddress(Request $req)
    {
        $address = $req->input('addUpdateAddress');
        if (
            DB::table('users')
                ->where('email', session('loggedInId'))
                ->value('address')
        ) {
            DB::update(
                "update users set address ='$address'  where email = ?",
                [session('loggedInId')]
            );
            $req->session('yourAddress')->put('yourAddress', $address);
            return redirect('addAddressPage');
        } else {
            DB::update(
                "update users set address ='$address'  where email = ?",
                [session('loggedInId')]
            );
            $req->session('yourAddress')->put('yourAddress', $address);
            return redirect('addAddressPage');
        }
    }

    //Buy Funstions
    public function Buy(Request $req)
    {
        if (!session('yourAddress')) {
            return 'Please add address first to buy this book';
        }

        $bookid = $req->id;
        return view('buy', ['bookid' => $bookid]);
    }
    public function buyBook(Request $req)
    {
        $buyCode = $req->buyCode;
        $bookid = $req->id;
        if (
            $buyCode !=
            DB::table('all_books')
                ->where('book_id', $bookid)
                ->value('price')
        ) {
            return 'Wrong Code entered';
        } else {
            DB::delete(
                'delete from wishlists where email = ? AND book_id = ?',
                [session('loggedInId'), $bookid]
            );
            DB::delete('delete from carts where email = ? AND book_id = ?', [
                session('loggedInId'),
                $bookid,
            ]);
            DB::insert('insert into owneds  values (?, ?)', [
                session('loggedInId'),
                $bookid,
            ]);
            return redirect('ownedPage');
        }
    }
    public function addToWishlist(Request $req)
    {
        $bookid = $req->id;
        if (
            session('loggedInId') ==
            DB::table('wishlists')
                ->where('book_id', $bookid)
                ->value('email')
        ) {
            return 'Book already in wishlist';
        } else {
            DB::insert('insert into wishlists  values (?, ?)', [
                session('loggedInId'),
                $bookid,
            ]);
            return redirect('home');
        }
    }
    public function addToCartlist(Request $req)
    {
        $bookid = $req->id;
        if (
            session('loggedInId') ==
            DB::table('carts')
                ->where('book_id', $bookid)
                ->value('email')
        ) {
            return 'Book already in cart';
        } else {
            DB::delete(
                'delete from wishlists where email = ? AND book_id = ?',
                [session('loggedInId'), $bookid]
            );

            DB::insert('insert into carts  values (?, ?)', [
                session('loggedInId'),
                $bookid,
            ]);
            return redirect('home');
        }
    }
    public function removeWishItem(Request $req)
    {
        $bookid = $req->id;
        DB::delete('delete from wishlists where email= ? AND book_id = ?', [
            session('loggedInId'),
            $bookid,
        ]);
        return redirect('wishlistPage');
    }

    public function removeCartItem(Request $req)
    {
        $bookid = $req->id;
        DB::delete('delete from carts where email= ? AND book_id = ?', [
            session('loggedInId'),
            $bookid,
        ]);
        return redirect('cartPage');
    }
}
