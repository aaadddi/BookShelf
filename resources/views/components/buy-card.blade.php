<style>
  .container{
      box-shadow: 0.001px 0.001px 3px #ff4f5a;
      padding:1em 1em;
      margin:auto;
     width:300px;
        transition:all 0.1s ease-in-out;
      /* min-height:800px; */
      height:min-content;
  }
  .container:hover{
    box-shadow: 0.001px 0.001px 30px #ff4f5a;
  }
  .container>img{
      max-height:20rem;
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
  .container>form{
      display:flex;
      flex-direction:column;
      justify-content:space-between;
  }
  .container>form>span{
      margin-top:10px;
      font-size:12px;
      
  }
  .container>form>input{
      border:none;
      border-bottom:1px solid #ff4f5a;
      outline:none;
      width:30%;
      padding:2px 6px;
      margin:3px ;

  }
  .container>form>button{
      margin-top:10px;
      border: 1px solid #ff4f5a;
      background-color:#ff4f5a;
      color:white;
      transition:all 0.1s ease-in-out;
      border-radius:10px;
      font-size:12px;
      padding:4px 0; 
      cursor:pointer;
  }
  .container>form>button:hover{
      border: 1px solid #ff4f5a;
      background-color:white;
      color:#ff4f5a;
  }
  .noneclass{
      display:none;
  }
</style>
<div>
    <div class="container">
    
    
        <img src="{{$coverlink}}" alt="">
        <h4>{{$title}}</h4>
        <h5><u>{{$author}}</u></h5>
        <p>$ {{$price}}</p>
        <form action="buyBook?id={{$bookid}}&" method="GET">
            <span>Enter Code</span>
            <input type="text" class="noneclass" value={{$bookid}} name="id">
            <input type="text" name="buyCode" required>
            <button>Buy</button>
        </form>
    </div>
   
</div>