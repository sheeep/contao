
<div class="<?php echo $this->class; ?> block"<?php echo $this->cssID; ?><?php if ($this->style): ?> style="<?php echo $this->style; ?>"<?php endif; ?>>

<div class="<?php echo $this->toggler; ?>"<?php if ($this->headlineStyle): ?> style="<?php echo $this->headlineStyle; ?>"<?php endif; ?>>
<?php echo $this->headline; ?> 
</div>

<div class="<?php echo $this->accordion; ?>"><div>
<?php if ($this->addBefore): ?>

<div class="image_container"<?php if ($this->margin || $this->float): ?> style="<?php echo $this->margin . $this->float; ?>"<?php endif; ?>>
<img src="<?php echo $this->src; ?>"<?php echo $this->imgSize; ?> alt="<?php echo $this->alt; ?>" />
<?php if ($this->caption): ?>
<div class="caption"><?php echo $this->caption; ?></div>
<?php endif; ?>
</div>
<?php endif; ?>

<?php echo $this->text; ?>

<?php if (!$this->addBefore): ?>

<div class="image_container"<?php if ($this->margin): ?> style="<?php echo $this->margin; ?>"<?php endif; ?>>
<img src="<?php echo $this->src; ?>"<?php echo $this->imgSize; ?> alt="<?php echo $this->alt; ?>" />
<?php if ($this->caption): ?>
<div class="caption"><?php echo $this->caption; ?></div>
<?php endif; ?>
</div>
<?php endif; ?>

</div></div>

</div>
