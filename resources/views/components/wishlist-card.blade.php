<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
    .wishlist-container{
        width:90%;
        margin:auto;
    }
    .wish-container{
        margin:10px 0;
        align-items:center;
        justify-content:space-between;
        display:flex;
        height:150px;
        width:100%;
        border:1px solid #ff4f5a;
        padding:10px 20px;
        background-color:white;
        box-shadow:0.1px 0.1px 10px black;
        border-radius:10px;
    }
    .wish-container>img{
        height:100%;
        object-fit:contain;
        
        border-radius:10px;
    }
    .wishlist-btns{
        display:flex;
        flex-direction:column;
        width:6rem;
        
    }
    .wishlist-details{
        flex:1;
        margin-left:1em;
    }
    .wishlist-details>h4{
        color:#ff4f5a;
    }
    .wishlist-btns>a>button{
        cursor:pointer;
        width:100%;
        margin:6px 0;
        padding:4px 0;
        font-size:10px;
        color:white;
        background-color:#ff4f5a;
        border:1px solid #ff4f5a;
        transition:all 0.1s ease-in-out;
        border-radius:20px;
    }
   
    .wishlist-btns>a>button:hover{
        color:#ff4f5a;
        background-color:white;
    }
    @media only screen and (max-width:500px){
        .wishlist-details>h4{
       font-size: 12px;
    }
    .wishlist-btns{
        width:4rem;
    }
    .wishlist-btns>a>button{
        padding:2px 0;
    }
    }
</style>
<div class="wishlist-container">
<div class="wish-container">    
<img src="{{$coverlink}}" alt="">
    <div class="wishlist-details">
        <span>{{$title}}</span>
        <h4>{{$author}}</h4>
        <h5>$ {{$price}}</h5>
    </div>
    <div class="wishlist-btns">
        <a href="buy?id={{$bookid}}"><button>Buy</button></a>
        <a href="cart?id={{$bookid}}"><button>Cart</button></a>
        <a href="removeWishItem?id={{$bookid}}"><button>Remove</button></a>
    </div>
    </div>
</div>