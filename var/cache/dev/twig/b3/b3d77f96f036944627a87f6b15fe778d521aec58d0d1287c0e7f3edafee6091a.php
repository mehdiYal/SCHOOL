<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_1befa2aa3d7e739ae3b0346dbd07b8d0f8b3b984addca4c45739c57315af0e3a extends Twig_Template
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
        $__internal_6bb9e3a79ab60755f2e5de391d162c57dfa4388c4e9952cf2a2cec67d7f63664 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bb9e3a79ab60755f2e5de391d162c57dfa4388c4e9952cf2a2cec67d7f63664->enter($__internal_6bb9e3a79ab60755f2e5de391d162c57dfa4388c4e9952cf2a2cec67d7f63664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_bf73a7411070e63695f19cc4204e03c6d93d15783867c88d73ad5b593459a240 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf73a7411070e63695f19cc4204e03c6d93d15783867c88d73ad5b593459a240->enter($__internal_bf73a7411070e63695f19cc4204e03c6d93d15783867c88d73ad5b593459a240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_6bb9e3a79ab60755f2e5de391d162c57dfa4388c4e9952cf2a2cec67d7f63664->leave($__internal_6bb9e3a79ab60755f2e5de391d162c57dfa4388c4e9952cf2a2cec67d7f63664_prof);

        
        $__internal_bf73a7411070e63695f19cc4204e03c6d93d15783867c88d73ad5b593459a240->leave($__internal_bf73a7411070e63695f19cc4204e03c6d93d15783867c88d73ad5b593459a240_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
