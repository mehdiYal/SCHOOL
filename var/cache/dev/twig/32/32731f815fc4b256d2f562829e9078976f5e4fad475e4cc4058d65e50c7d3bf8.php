<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_7b5d31834f6561c2879071a8ef87f144ddd03ac75641c5f56db16873e0bf9180 extends Twig_Template
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
        $__internal_e5365b92697b74998169a4f55671695bc5df31822c05c38a7baa7c0fc6f11f92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5365b92697b74998169a4f55671695bc5df31822c05c38a7baa7c0fc6f11f92->enter($__internal_e5365b92697b74998169a4f55671695bc5df31822c05c38a7baa7c0fc6f11f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_bfffbb2aa497e431c0719a46942a3e78745b6d9df7bc4248f16b4bfb79785250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfffbb2aa497e431c0719a46942a3e78745b6d9df7bc4248f16b4bfb79785250->enter($__internal_bfffbb2aa497e431c0719a46942a3e78745b6d9df7bc4248f16b4bfb79785250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e5365b92697b74998169a4f55671695bc5df31822c05c38a7baa7c0fc6f11f92->leave($__internal_e5365b92697b74998169a4f55671695bc5df31822c05c38a7baa7c0fc6f11f92_prof);

        
        $__internal_bfffbb2aa497e431c0719a46942a3e78745b6d9df7bc4248f16b4bfb79785250->leave($__internal_bfffbb2aa497e431c0719a46942a3e78745b6d9df7bc4248f16b4bfb79785250_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
