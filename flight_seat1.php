<?php
session_start();

error_reporting(0);

include("config.php");

if(!isset($_SESSION['username']) && ($_SESSION['password']))
{
	 header('location:login.php');
}
else
{
}

?>
<html><head>
<link rel="stylesheet" type="text/css" href="css/flight1.css">

  <script>
   window.onload = disableChecked(); 

   function disableChecked()
   {
     if($("#seat[]").is(':checked')){
       $("#seat[]").attr("disabled", true);
     }
    }

   </script> 
</head>
<body><fieldset>
<center><h1><header>Seat Selection</header></h1></center>
<form action="fbook.php" method="post">  
<center>
 <div class="oval">
<div class="row">

<div class="col"><input type="checkbox" name="seat[]" value="48" onClick="disableChecked()"/><label>48</label></div><b>front Side</b>
<div class="col"><input type="checkbox" name="seat[]" value="45"/><label>45</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="42"/><label>42</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="39"/><label>39</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="36"/><label>36</label></div>
  <div class="col"><input type="checkbox" name="seat[]" value="33" checked  disabled="disabled"/><label>33</label></div>
  <div class="col"><input type="checkbox" name="seat[]" value="30"/><label>30</label></div>
  <div class="col"><input type="checkbox" name="seat[]" value="27"/><label>27</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="24" checked disabled="disabled"/><label>24</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="21"/><label>21</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="18"/><label>18</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="15"/><label>15</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="12"/><label>12</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="09"/><label>09</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="06"/><label>06</label></div>
</div>
<div class="row">

   <div class="col"><input type="checkbox" name="seat[]" value="47"/><label>47</label></div>
    <div class="col"><input type="checkbox" name="seat[]" value="44"/><label>44</label></div>
    <div class="col"><input type="checkbox" name="seat[]" value="41"/><label>41</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="38"/><label>38</label></div>
  <div class="col"><input type="checkbox" name="seat[]" value="35"/><label>35</label></div>
  <div class="col"><input type="checkbox" name="seat[]" value="32" checked disabled="disabled"/><label>32</label></div>
  <div class="col"><input type="checkbox" name="seat[]" value="29"/><label>29</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="26"/><label>26</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="23" checked disabled="disabled"/><label>23</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="20"/><label>20</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="17"/><label>17</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="14"/><label>14</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="11"/><label>11</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="08"/><label>08</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="05"/><label>05</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="03" checked disabled="disabled"/><label>03</label></div>
</div>
<div class="row">

<div class="col"><input type="checkbox" name="seat[]" value="46"/><label>46</label></div>
   <div class="col"><input type="checkbox" name="seat[]" value="43"/><label>43</label></div>
    <div class="col"><input type="checkbox" name="seat[]" value="40"/><label>40</label></div>
    <div class="col"><input type="checkbox" name="seat[]" value="37" checked disabled="disabled"/><label>37</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="34"/><label>34</label></div>
  <div class="col"><input type="checkbox" name="seat[]" value="31"/><label>31</label></div>
  <div class="col"><input type="checkbox" name="seat[]" value="28"/><label>28</label></div>
  <div class="col"><input type="checkbox" name="seat[]" value="25"checked disabled="disabled"/><label>25</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="22"/><label>22</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="19"/><label>19</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="16"/><label>16</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="13"/><label>13</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="10"/><label>10</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="07"/><label>07</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="04" checked disabled="disabled"/><label>04</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="02"/><label>02</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="01"/><label>01</label></div>


</div>

Airoplane Seat Model
<br>
<div class="row">
<div class="col"><input type="checkbox" name="seat[]" value="49"/><label>49</label></div>
   <div class="col"><input type="checkbox" name="seat[]" value="52"/><label>52</label></div>
    <div class="col"><input type="checkbox" name="seat[]" value="55"/><label>55</label></div>
    <div class="col"><input type="checkbox" name="seat[]" value="58" checked disabled="disabled"/><label>58</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="61"/><label>61</label></div>
  <div class="col"><input type="checkbox" name="seat[]" value="64"checked disabled="disabled"/><label>64</label></div>
  <div class="col"><input type="checkbox" name="seat[]" value="67"/><label>67</label></div>
  <div class="col"><input type="checkbox" name="seat[]" value="70"/><label>70</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="73"/><label>73</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="76"/><label>76</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="79"/><label>79</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="82"/><label>82</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="85"/><label>85</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="88" checked disabled="disabled"/><label>88</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="91"/><label>91</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="94"/><label>94</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="96"/><label>96</label></div>

</div>
<div class="row">

   <div class="col"><input type="checkbox" name="seat[]" value="50"/><label>50</label></div>
    <div class="col"><input type="checkbox" name="seat[]" value="53"/><label>53</label></div>
    <div class="col"><input type="checkbox" name="seat[]" value="56" checked disabled="disabled"/><label>56</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="59"/><label>59</label></div>
  <div class="col"><input type="checkbox" name="seat[]" value="62"/><label>62</label></div>
  <div class="col"><input type="checkbox" name="seat[]" value="65"/><label>65</label></div>
  <div class="col"><input type="checkbox" name="seat[]" value="68"/><label>68</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="71"/><label>71</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="74"/><label>74</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="77"/><label>77</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="80" checked disabled="disabled"/><label>80</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="83" checked disabled="disabled"/><label>83</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="86"/><label>86</label></div>
<div class="col"><input type="checkbox" name="seat[]"  value="89" checked disabled="disabled"/><label>89</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="92"/><label>92</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="95"/><label>95</label></div>
</div>
<div class="row">
   <div class="col"><input type="checkbox" name="seat[]" value="51"/><label>51</label></div><b>front Side</b>
    <div class="col"><input type="checkbox" name="seat[]" value="54"/><label>54</label></div>
    <div class="col"><input type="checkbox" name="seat[]" value="57"/><label>57</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="60"/><label>60</label></div>
  <div class="col"><input type="checkbox" name="seat[]" value="63" checked disabled="disabled"/><label>63</label></div>
  <div class="col"><input type="checkbox" name="seat[]" value="66"/><label>66</label></div>
  <div class="col"><input type="checkbox" name="seat[]" value="69"/><label>69</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="72"/><label>72</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="75"/><label>75</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="78"/><label>78</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="81"/><label>81</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="84"/><label>84</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="87"/><label>87</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="90" checked disabled="disabled"/><label>90</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="93"/><label>93</label></div>

</div>
</div></center>
<center>
<br><br>
<fieldset><input type="submit" value="continue"></fieldset>
</center></fieldset></body></html>


<?php
$_SESSION['leaving_from']=$leaving;
$_SESSION['going_to']=$going;
?>
