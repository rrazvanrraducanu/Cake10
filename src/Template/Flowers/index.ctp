<h2>Move</h2>
<style>
.fixed-size  {
  width: 400px;
  height: 40px;
}
</style>
<?php
//echo $this->Form->create('Elev', array('action'=>'index'));
echo $this->Form->create();
echo $this->Form->input('var1', ['type'=>'text','value'=>$var1,'style'=>'width:400px; height:40px;']);
echo $this->Form->button('=>', ['type' => 'submit']);
echo $this->Form->textarea('var2', ['type'=>'text','value'=>$var1,'class'=>'fixed-size']);
echo $this->Form->button('=>', ['type' => 'submit']);
echo "<br/>";
$sizes = [''=>'','s' => 'Small', 'm' => 'Medium', 'l' => 'Large', $var2=>$var2];
echo $this->Form->select('var3', $sizes, ['default' => '','class'=>'fixed-size']);
echo "<br/>";
echo $this->Form->button('=>', ['type' => 'submit']);
echo $this->Form->input('var4', ['type'=>'text','value'=>$var3,'style'=>'width:400px; height:40px;']);
echo $this->Form->end();
?>

