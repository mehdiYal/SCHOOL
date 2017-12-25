<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_98378b0b10c1aa84b052cd06e016af7182c732531d2cc614546c430bcd2fa86b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cba31c0b5f9ccff950a646223ce6106a07a2f0de1d140c3c6c86f11a0f9242a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cba31c0b5f9ccff950a646223ce6106a07a2f0de1d140c3c6c86f11a0f9242a3->enter($__internal_cba31c0b5f9ccff950a646223ce6106a07a2f0de1d140c3c6c86f11a0f9242a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_70dce77898e21ce7d0f5b1aaf3be310f27c8e6e44d34f60257cfb4648b295d3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70dce77898e21ce7d0f5b1aaf3be310f27c8e6e44d34f60257cfb4648b295d3d->enter($__internal_70dce77898e21ce7d0f5b1aaf3be310f27c8e6e44d34f60257cfb4648b295d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_cba31c0b5f9ccff950a646223ce6106a07a2f0de1d140c3c6c86f11a0f9242a3->leave($__internal_cba31c0b5f9ccff950a646223ce6106a07a2f0de1d140c3c6c86f11a0f9242a3_prof);

        
        $__internal_70dce77898e21ce7d0f5b1aaf3be310f27c8e6e44d34f60257cfb4648b295d3d->leave($__internal_70dce77898e21ce7d0f5b1aaf3be310f27c8e6e44d34f60257cfb4648b295d3d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
