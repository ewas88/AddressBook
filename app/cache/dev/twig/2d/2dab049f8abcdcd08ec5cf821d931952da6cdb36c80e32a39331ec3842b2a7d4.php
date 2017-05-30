<?php

/* AddressBookBundle:Person:modify.html.twig */
class __TwigTemplate_24b721ec5124852f39844e2ab963ac1f4037386a9ab7205e78302dedd96408cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AddressBookBundle:Person:modify.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_75b9060200e35194276804b0760621743aea9ac391b15113f9983039d18e2e72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75b9060200e35194276804b0760621743aea9ac391b15113f9983039d18e2e72->enter($__internal_75b9060200e35194276804b0760621743aea9ac391b15113f9983039d18e2e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AddressBookBundle:Person:modify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75b9060200e35194276804b0760621743aea9ac391b15113f9983039d18e2e72->leave($__internal_75b9060200e35194276804b0760621743aea9ac391b15113f9983039d18e2e72_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_75d9d98e72fc333079365cfd7bb0734b507c9378451068715b4ff566d7e819ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75d9d98e72fc333079365cfd7bb0734b507c9378451068715b4ff566d7e819ae->enter($__internal_75d9d98e72fc333079365cfd7bb0734b507c9378451068715b4ff566d7e819ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        echo "Modify a person";
        echo " ";
        
        $__internal_75d9d98e72fc333079365cfd7bb0734b507c9378451068715b4ff566d7e819ae->leave($__internal_75d9d98e72fc333079365cfd7bb0734b507c9378451068715b4ff566d7e819ae_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3dceca51e672e8b9725a96da9be10a79ab67046be64aae6be4f07327bb31f401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dceca51e672e8b9725a96da9be10a79ab67046be64aae6be4f07327bb31f401->enter($__internal_3dceca51e672e8b9725a96da9be10a79ab67046be64aae6be4f07327bb31f401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"w3-display-topleft w3-container ex2\">
        <h3 class=\"w3-container w3-grey\">Modify details for ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "surname", array()), "html", null, true);
        echo "</h3>
        <h4 class=\"w3-container w3-grey\">Input all information</h4>

            <form action=\"#\" method=\"POST\">
                <p>
                    <b>Name:</b> <input type=\"text\" name=\"name\" required><br>
                </p>
                <p>
                    <b>Surname:</b> <input type=\"text\" name=\"surname\" required><br>
                </p>
                <p>
                    <b>Description:</b> <input type=\"text\" name=\"description\" required><br>
                </p>
                <p>
                    <input class=\"w3-button w3-grey\" type=\"submit\" name=\"send\" value=\"Modify\">
                </p>
            </form>

        <form action=\"/book/";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "id", array()), "html", null, true);
        echo "/addAddress\" method=\"GET\">
            <p>
            <button class=\"w3-button w3-black\">Add/Modify address</button>
            </p>
        </form>
        <form action=\"/book/";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "id", array()), "html", null, true);
        echo "/addEmail\" method=\"GET\">
            <p>
            <button class=\"w3-button w3-black\">Add/Modify email</button>
            </p>
        </form>
        <form action=\"/book/";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "id", array()), "html", null, true);
        echo "/addPhone\" method=\"GET\">
            <p>
            <button class=\"w3-button w3-black\">Add/Modify phone</button>
            </p>
        </form>
        <a href=\"/book/";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "id", array()), "html", null, true);
        echo "\" class=\"w3-button w3-teal w3-padding-large\">Go back</a>
    </div>
";
        
        $__internal_3dceca51e672e8b9725a96da9be10a79ab67046be64aae6be4f07327bb31f401->leave($__internal_3dceca51e672e8b9725a96da9be10a79ab67046be64aae6be4f07327bb31f401_prof);

    }

    public function getTemplateName()
    {
        return "AddressBookBundle:Person:modify.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 40,  97 => 35,  89 => 30,  81 => 25,  58 => 7,  55 => 6,  49 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %} {{ 'Modify a person' }} {% endblock %}

{% block body %}
    <div class=\"w3-display-topleft w3-container ex2\">
        <h3 class=\"w3-container w3-grey\">Modify details for {{ person.name}} {{  person.surname}}</h3>
        <h4 class=\"w3-container w3-grey\">Input all information</h4>

            <form action=\"#\" method=\"POST\">
                <p>
                    <b>Name:</b> <input type=\"text\" name=\"name\" required><br>
                </p>
                <p>
                    <b>Surname:</b> <input type=\"text\" name=\"surname\" required><br>
                </p>
                <p>
                    <b>Description:</b> <input type=\"text\" name=\"description\" required><br>
                </p>
                <p>
                    <input class=\"w3-button w3-grey\" type=\"submit\" name=\"send\" value=\"Modify\">
                </p>
            </form>

        <form action=\"/book/{{ person.id }}/addAddress\" method=\"GET\">
            <p>
            <button class=\"w3-button w3-black\">Add/Modify address</button>
            </p>
        </form>
        <form action=\"/book/{{ person.id }}/addEmail\" method=\"GET\">
            <p>
            <button class=\"w3-button w3-black\">Add/Modify email</button>
            </p>
        </form>
        <form action=\"/book/{{ person.id }}/addPhone\" method=\"GET\">
            <p>
            <button class=\"w3-button w3-black\">Add/Modify phone</button>
            </p>
        </form>
        <a href=\"/book/{{ person.id }}\" class=\"w3-button w3-teal w3-padding-large\">Go back</a>
    </div>
{% endblock %}", "AddressBookBundle:Person:modify.html.twig", "/home/ewa/Workspace/AddressBook/src/AddressBookBundle/Resources/views/Person/modify.html.twig");
    }
}
