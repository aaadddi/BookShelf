<style>
    .wishlist-container{
        width:50%;
        margin:auto;
    }
    .wish-container{
        margin:10px 0;
        align-items:center;
        justify-content:space-between;
        display:flex;
        height:100px;
        width:100%;
        border:1px solid #ff4f5a;
        padding:10px 10px;
        box-shadow:0.1px 0.1px 10px #ff4f5a;
    }
    .wish-container>img{
        height:100%;
        object-fit:contain;
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
        
        <a href="removeCartItem?id={{$bookid}}"><button>Remove</button></a>
    </div>
    </div>
</div>