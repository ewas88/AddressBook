<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_2fe0e6e9601ad1bb55636c5ac906491ec31a948d14263bcc5733c1598c9cf84e extends Twig_Template
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
        $__internal_28542aae707dec6607eb8b41ae977e477ca71aa4e476fbc8f98e631f4a4d6aaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28542aae707dec6607eb8b41ae977e477ca71aa4e476fbc8f98e631f4a4d6aaf->enter($__internal_28542aae707dec6607eb8b41ae977e477ca71aa4e476fbc8f98e631f4a4d6aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_28542aae707dec6607eb8b41ae977e477ca71aa4e476fbc8f98e631f4a4d6aaf->leave($__internal_28542aae707dec6607eb8b41ae977e477ca71aa4e476fbc8f98e631f4a4d6aaf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/ewa/Workspace/AddressBook/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
