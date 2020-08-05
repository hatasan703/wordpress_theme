
<form id="search_form" action="http://dev.local/" method="get">
  <button type="submit" id="sbtn"><i class="fas fa-search"></i></button>
  <input id="sbox2"  id="s" name="s" type="text" placeholder="サイト内検索"/>
</form>


<style>

  #search_form{
    display: flex;
    margin-left: 20px;
  }
  #sbtn{
    background: #CBCBCB;
    padding: 5px;
  }
  #search_form i{
    color: #fff;
  }
  #sbox2{
    width: 150px;
    border: 1px solid #CBCBCB;
  }

  ::placeholder {
    /* margin-left: 20px; */
    text-align: center;
  color: #CBCBCB;
  font-size: 12px;
}
</style>