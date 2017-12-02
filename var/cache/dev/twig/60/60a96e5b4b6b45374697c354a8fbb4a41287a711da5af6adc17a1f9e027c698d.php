<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_f87e5405d7d16c88bba9b33e5dbe08f4edbe7c2e2d9ca1503489ff80a6374d9c extends Twig_Template
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
        $__internal_d287731c22297fc36cc798ae3d2b9f1ec88eb3ec8e31bec2115ab5c39dd1a967 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d287731c22297fc36cc798ae3d2b9f1ec88eb3ec8e31bec2115ab5c39dd1a967->enter($__internal_d287731c22297fc36cc798ae3d2b9f1ec88eb3ec8e31bec2115ab5c39dd1a967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_285b7f80172d5d83819b077703c1c8caa7acd9072fb8aac4a38409b0cbce504e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_285b7f80172d5d83819b077703c1c8caa7acd9072fb8aac4a38409b0cbce504e->enter($__internal_285b7f80172d5d83819b077703c1c8caa7acd9072fb8aac4a38409b0cbce504e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_d287731c22297fc36cc798ae3d2b9f1ec88eb3ec8e31bec2115ab5c39dd1a967->leave($__internal_d287731c22297fc36cc798ae3d2b9f1ec88eb3ec8e31bec2115ab5c39dd1a967_prof);

        
        $__internal_285b7f80172d5d83819b077703c1c8caa7acd9072fb8aac4a38409b0cbce504e->leave($__internal_285b7f80172d5d83819b077703c1c8caa7acd9072fb8aac4a38409b0cbce504e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
