<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_369416ce0332a0ae5a4d2ae5dba29c42b8e4a0fc1b60bbeab15c15728178b1a6 extends Twig_Template
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
        $__internal_90565a49fd3fa2821d34e06c79a0a76e00433e873d964f0df1e7984b3088eca1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90565a49fd3fa2821d34e06c79a0a76e00433e873d964f0df1e7984b3088eca1->enter($__internal_90565a49fd3fa2821d34e06c79a0a76e00433e873d964f0df1e7984b3088eca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_0dc659815b9ece5032baf4003cc1a1cf871280fad9f9e8561dc5cf09394f0304 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dc659815b9ece5032baf4003cc1a1cf871280fad9f9e8561dc5cf09394f0304->enter($__internal_0dc659815b9ece5032baf4003cc1a1cf871280fad9f9e8561dc5cf09394f0304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_90565a49fd3fa2821d34e06c79a0a76e00433e873d964f0df1e7984b3088eca1->leave($__internal_90565a49fd3fa2821d34e06c79a0a76e00433e873d964f0df1e7984b3088eca1_prof);

        
        $__internal_0dc659815b9ece5032baf4003cc1a1cf871280fad9f9e8561dc5cf09394f0304->leave($__internal_0dc659815b9ece5032baf4003cc1a1cf871280fad9f9e8561dc5cf09394f0304_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
