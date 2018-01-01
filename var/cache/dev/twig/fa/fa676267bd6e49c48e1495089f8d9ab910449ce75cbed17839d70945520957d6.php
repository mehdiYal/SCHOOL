<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_8a846d81a837d9f9c769a12958edd99617d5e525896bfcf0fed988794ef9928b extends Twig_Template
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
        $__internal_bf4c97b43921b9cf681234717ea48cb15c55a4f88618aa1bcf7e57c70a4662d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf4c97b43921b9cf681234717ea48cb15c55a4f88618aa1bcf7e57c70a4662d6->enter($__internal_bf4c97b43921b9cf681234717ea48cb15c55a4f88618aa1bcf7e57c70a4662d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_569deca02624a7f914ef30e5a7a5dd92893e48686a092c42fff624b4a165dd80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_569deca02624a7f914ef30e5a7a5dd92893e48686a092c42fff624b4a165dd80->enter($__internal_569deca02624a7f914ef30e5a7a5dd92893e48686a092c42fff624b4a165dd80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_bf4c97b43921b9cf681234717ea48cb15c55a4f88618aa1bcf7e57c70a4662d6->leave($__internal_bf4c97b43921b9cf681234717ea48cb15c55a4f88618aa1bcf7e57c70a4662d6_prof);

        
        $__internal_569deca02624a7f914ef30e5a7a5dd92893e48686a092c42fff624b4a165dd80->leave($__internal_569deca02624a7f914ef30e5a7a5dd92893e48686a092c42fff624b4a165dd80_prof);

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
