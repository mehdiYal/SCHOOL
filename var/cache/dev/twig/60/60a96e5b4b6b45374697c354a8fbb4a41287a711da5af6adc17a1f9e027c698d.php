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
        $__internal_8cdac4b96892811db2529338a2ecf51bbb1a5c5f454c0fc2bdc887a449c0c5eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cdac4b96892811db2529338a2ecf51bbb1a5c5f454c0fc2bdc887a449c0c5eb->enter($__internal_8cdac4b96892811db2529338a2ecf51bbb1a5c5f454c0fc2bdc887a449c0c5eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_53b47f5f15829d7d5ed57f6673541947a942503f77f0c8158189626ec5b4a326 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53b47f5f15829d7d5ed57f6673541947a942503f77f0c8158189626ec5b4a326->enter($__internal_53b47f5f15829d7d5ed57f6673541947a942503f77f0c8158189626ec5b4a326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_8cdac4b96892811db2529338a2ecf51bbb1a5c5f454c0fc2bdc887a449c0c5eb->leave($__internal_8cdac4b96892811db2529338a2ecf51bbb1a5c5f454c0fc2bdc887a449c0c5eb_prof);

        
        $__internal_53b47f5f15829d7d5ed57f6673541947a942503f77f0c8158189626ec5b4a326->leave($__internal_53b47f5f15829d7d5ed57f6673541947a942503f77f0c8158189626ec5b4a326_prof);

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
", "@Framework/FormTable/form_row.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
