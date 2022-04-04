<style>
  .container{
      box-shadow: 0.001px 0.001px 3px #ff4f5a;
      padding:1em 1em;
      margin:2rem 3rem;
      max-width:200px;
        
      /* min-height:800px; */
      height:min-content;
  }
  .container:hover{
    box-shadow: 0.001px 0.001px 30px #ff4f5a;
  }
  .container>img{
      max-height:15rem;
      object-fit:contain;
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
      margin:auto;
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
</style>
<div>
    <div class="container">
    
    
        <img src="{{$coverlink}}" alt="">
        <h4>{{$title}}</h4>
        <h5><u>{{$author}}</u></h5>
        <p>$ {{$price}}</p>
        <div class="cardbtns">
            <a href=""><button>Buy</button></a>
            <a href=""><button>Wishlist</button></a>
            <a href=""><button>Cart</button></a>
        </div>
    </div>
    <!-- Order your soul. Reduce your wants. - Augustine -->
</div>