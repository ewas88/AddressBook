<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_cabee9e47719bc6f8e2a12dbf52a8ebf8137b9b5576feb69dbe2eea21f292ffd extends Twig_Template
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
        $__internal_03cc0a6fa2aa13ca663901f48fde6927bab25d9e812ce64e6d5dced070bfe41c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03cc0a6fa2aa13ca663901f48fde6927bab25d9e812ce64e6d5dced070bfe41c->enter($__internal_03cc0a6fa2aa13ca663901f48fde6927bab25d9e812ce64e6d5dced070bfe41c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_03cc0a6fa2aa13ca663901f48fde6927bab25d9e812ce64e6d5dced070bfe41c->leave($__internal_03cc0a6fa2aa13ca663901f48fde6927bab25d9e812ce64e6d5dced070bfe41c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/ewa/Workspace/AddressBook/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
