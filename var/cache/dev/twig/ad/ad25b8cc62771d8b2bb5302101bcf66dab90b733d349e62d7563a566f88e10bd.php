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
        $__internal_960a1d4b56fd7197e518f0f72deeaa7e25f2ce3923d140cae342032643ec6b74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_960a1d4b56fd7197e518f0f72deeaa7e25f2ce3923d140cae342032643ec6b74->enter($__internal_960a1d4b56fd7197e518f0f72deeaa7e25f2ce3923d140cae342032643ec6b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_e99d016794b082966ec420e35b179fa3c55524ffdc090cebdb48df0beb57a895 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e99d016794b082966ec420e35b179fa3c55524ffdc090cebdb48df0beb57a895->enter($__internal_e99d016794b082966ec420e35b179fa3c55524ffdc090cebdb48df0beb57a895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_960a1d4b56fd7197e518f0f72deeaa7e25f2ce3923d140cae342032643ec6b74->leave($__internal_960a1d4b56fd7197e518f0f72deeaa7e25f2ce3923d140cae342032643ec6b74_prof);

        
        $__internal_e99d016794b082966ec420e35b179fa3c55524ffdc090cebdb48df0beb57a895->leave($__internal_e99d016794b082966ec420e35b179fa3c55524ffdc090cebdb48df0beb57a895_prof);

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
