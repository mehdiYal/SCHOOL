<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_ac1b22f4e0067887cffd8f14d0441c1529f7637c88570fc925f978c47a3b150f extends Twig_Template
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
        $__internal_06cf298023b13ff14871aaab4c7e621389cb083581ef9d1f44244f9ed4e038dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06cf298023b13ff14871aaab4c7e621389cb083581ef9d1f44244f9ed4e038dd->enter($__internal_06cf298023b13ff14871aaab4c7e621389cb083581ef9d1f44244f9ed4e038dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_f6a07ca767bc0629e3ca6d563d5b83785a9dcfe9c790b19fbbdf1f195ad59787 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6a07ca767bc0629e3ca6d563d5b83785a9dcfe9c790b19fbbdf1f195ad59787->enter($__internal_f6a07ca767bc0629e3ca6d563d5b83785a9dcfe9c790b19fbbdf1f195ad59787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_06cf298023b13ff14871aaab4c7e621389cb083581ef9d1f44244f9ed4e038dd->leave($__internal_06cf298023b13ff14871aaab4c7e621389cb083581ef9d1f44244f9ed4e038dd_prof);

        
        $__internal_f6a07ca767bc0629e3ca6d563d5b83785a9dcfe9c790b19fbbdf1f195ad59787->leave($__internal_f6a07ca767bc0629e3ca6d563d5b83785a9dcfe9c790b19fbbdf1f195ad59787_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
