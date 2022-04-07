<style>
  .container{
      background-color:white;
      /* box-shadow: 0.001px 0.001px 3px black; */
      padding:1em 1em;
      margin:2rem 3rem;
     width:200px;
        transition:all 0.1s ease-in-out;
      /* min-height:800px; */
      height:min-content;
      border-radius:20px;
      box-shadow: 0.001px 1px 30px ;
  }
 
  .cover{
      border-radius:10px;
      overflow:hidden;
     
      align-items:center;
      width:fit-content;
      height:fit-content;
      max-height:15rem;

  }
  .cover>img{
      height:100%;
      width:100%;
    
     
       
      
  }
  .container>h4{
      padding:4px 0px;
      font-size:15px;
      font-weight:100;
      
    }
    .container>h5{
        color:#ff4f5a;
   
    font-weight:200;
    padding:4px 0;
  }
  .container>p{
    
      padding:4px 0;
  }
  .cardbtns>a{
     margin : 4px 0;
  }
  .cardbtns>a>button{
        margin:4px 0;
      padding:4px 2px;
      width:60px;
      background:#ff4f5a;
      border:none;
      cursor:pointer;
      font-size:10px;
      color:white;
      border-radius:20px;
      border: 1px solid #ff4f5a;
      transition:all 0.1s ease-in-out;   
  } 
  .cardbtns>a>button:hover{
      color: #ff4f5a;
      background-color:white;

  }
  #loggedCheck{
      width:100%;
  }
  #loggedCheck>button{
      width:100%;
  }
</style>
<div>
    <div class="container">
    
        <div class="cover">
        <img src="{{$coverlink}}" alt="">
        </div>
        <h4>{{$title}}</h4>
        <h5><u>{{$author}}</u></h5>
        <p>$ {{$price}}</p>
        <div class="cardbtns">
            @if(session('loggedIn'))
            <a href="buy?id={{$bookid}}"><button>Buy</button></a>
            <a href="wishlist?id={{$bookid}}"><button>Wishlist</button></a>
            <a href="cart?id={{$bookid}}"><button>Cart</button></a>
            @else
            <a href="/account" id="loggedCheck"><button>Login to buy this book</button></a>
            @endif
        </div>
    </div>
   
</div>