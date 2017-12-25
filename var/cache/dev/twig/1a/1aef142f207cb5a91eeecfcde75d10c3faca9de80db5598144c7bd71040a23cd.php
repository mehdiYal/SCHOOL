<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_9f579a794f7c9498e8b150b6fec5db9fd656599e809278d9031a4f35d2670800 extends Twig_Template
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
        $__internal_d7af721c6adb244a84320a43b9c809376cae4ca5ceda10885065da0b519d3f53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7af721c6adb244a84320a43b9c809376cae4ca5ceda10885065da0b519d3f53->enter($__internal_d7af721c6adb244a84320a43b9c809376cae4ca5ceda10885065da0b519d3f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_ee7ad28d5f89c879d9e79b51b1a9d6f5e102f128334eb9e0b542c3fadf4b6abc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee7ad28d5f89c879d9e79b51b1a9d6f5e102f128334eb9e0b542c3fadf4b6abc->enter($__internal_ee7ad28d5f89c879d9e79b51b1a9d6f5e102f128334eb9e0b542c3fadf4b6abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_d7af721c6adb244a84320a43b9c809376cae4ca5ceda10885065da0b519d3f53->leave($__internal_d7af721c6adb244a84320a43b9c809376cae4ca5ceda10885065da0b519d3f53_prof);

        
        $__internal_ee7ad28d5f89c879d9e79b51b1a9d6f5e102f128334eb9e0b542c3fadf4b6abc->leave($__internal_ee7ad28d5f89c879d9e79b51b1a9d6f5e102f128334eb9e0b542c3fadf4b6abc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
